### JCB! Power
# final class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**

```uml
@startuml

class Data << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Event $event
  # Placeholder $placeholder
  # ComponentPlaceholder $componentplaceholder
  # Dispenser $dispenser
  # Customcode $customcode
  # Gui $gui
  # Field $field
  # FieldName $fieldname
  # UniqueName $uniquename
  # Filesfolders $filesfolders
  # Historycomponent $history
  # Whmcs $whmcs
  # Sqltweaking $sqltweaking
  # Adminviews $adminviews
  # Siteviews $siteviews
  # Customadminviews $customadminviews
  # Updateserver $updateserver
  # Joomlamodules $modules
  # Joomlaplugins $plugins
  # Router $router
  # DatabaseInterface $db
  + __construct(Config $config, Event $event, ...)
  + get() : ?object
  - getQuery() : string
  - energize(object $component) : void
  - setComponentNames(object $component) : void
  - setVersion(object $component) : void
  - setImagePath(object $component) : void
  - setGlobalConfig(object $component) : void
  - setFilesFolders(object $component) : void
  - setUiKit(object $component) : void
  - setWhmcs(object $component) : void
  - setFootable(object $component) : void
  - setCustomMenus(object $component) : void
  - setSqlTweaks(object $component) : void
  - setViews(object $component) : void
  - setConfigData(object $component) : void
  - setContributors(object $component) : void
  - setUpdateServer(object $component) : void
  - setBuildDate(object $component) : void
  - setHistory(object $component) : void
  - setDispenserConfigs(object $component) : void
  - initializeGuiMapper() : array
  - configureJavaScript(object $component, array $guiMapper) : void
  - configureGlobalCss(object $component) : void
  - configurePhpScripts(object $component, array $guiMapper) : void
  - configurePhpHelpers(object $component, array $guiMapper) : void
  - configureAdminAndSiteEvents(object $component, array $guiMapper) : void
  - setSql(object $component) : void
  - setBom(object $component) : void
  - setReadMe(object $component) : void
  - setDashboardMethods(object $component) : void
  - setServers(object $component) : void
  - normalizeServerUrls(object $component) : void
  - configureServerProtocols(object $component) : void
  - extractXmlFilename(string $url) : ?string
  - stripXmlExtension(string $filename) : string
  - setIgnoreFolders(object $component) : void
  - setModules(object $component) : void
  - setPlugins(object $component) : void
  - setRouter(object $component) : void
}

note right of Data::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Event $event
    Placeholder $placeholder
    ComponentPlaceholder $componentplaceholder
    Dispenser $dispenser
    Customcode $customcode
    Gui $gui
    Field $field
    FieldName $fieldname
    UniqueName $uniquename
    Filesfolders $filesfolders
    Historycomponent $historycomponent
    Whmcs $whmcs
    Sqltweaking $sqltweaking
    Adminviews $adminviews
    Siteviews $siteviews
    Customadminviews $customadminviews
    Updateserver $updateserver
    Joomlamodules $joomlamodules
    Joomlaplugins $joomlaplugins
    Router $router
    DatabaseInterface $db
end note

note left of Data::get
  get current component data

  since: 3.2.0
  return: ?object
end note

note right of Data::getQuery
  get current component data query

  since: 5.0.4
  return: string
end note

note left of Data::energize
  Transform the current component data by loading all children.
This method orchestrates various transformations and settings
on the `$component` object. Since objects in PHP are passed
by reference, all changes to `$component` inside helper
methods directly update the same instance.

  since: 5.0.4
  return: void
end note

note right of Data::setComponentNames
  Sets the sales name and name code of the component.

  since: 5.0.4
  return: void
end note

note left of Data::setVersion
  Ensures the component version naming is correct.

  since: 5.0.4
  return: void
end note

note right of Data::setImagePath
  Ensures the image field contains only the image path.

  since: 5.0.4
  return: void
end note

note left of Data::setGlobalConfig
  Sets the global configuration for the project website and author.
Defaults are provided if the website or author fields are not set.

  since: 5.0.4
  return: void
end note

note right of Data::setFilesFolders
  Sets the files and folders configuration for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setUiKit
  Configures the UIkit switch for the component.

  since: 5.0.4
  return: void
end note

note right of Data::setWhmcs
  Configures WHMCS links for the component if applicable.

  since: 5.0.4
  return: void
end note

note left of Data::setFootable
  Configures Footable settings for the component.
If `addfootable` is greater than 0, Footable is enabled, and its version
is set to either 2 or 3 based on the value of `addfootable`.

  since: 5.0.4
  return: void
end note

note right of Data::setCustomMenus
  Configures custom menus for the component.
If `addcustommenus` is a valid JSON string, it is decoded and set as
an array in the `custommenus` property. Otherwise, it is unset.

  since: 5.0.4
  return: void
end note

note left of Data::setSqlTweaks
  Applies SQL tweaking configurations to the component.

  since: 5.0.4
  return: void
end note

note right of Data::setViews
  Configures admin, site, and custom admin views for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setConfigData
  Processes additional configuration data for the component.
If `addconfig` is a valid JSON string, it is decoded and stored in the `config` property.
Fields are processed and validated, and unique names are set for each field.

  since: 5.0.4
  return: void
end note

note right of Data::setContributors
  Processes and sets contributors for the component.
If `addcontributors` is a valid JSON string, it is decoded and stored in the `contributors` property.

  since: 5.0.4
  return: void
end note

note left of Data::setUpdateServer
  Configures the update server details for the component.

  since: 5.0.4
  return: void
end note

note right of Data::setBuildDate
  Sets the build date for the component based on creation or modification date.

  since: 5.0.4
  return: void
end note

note left of Data::setHistory
  Applies the history configuration to the component.

  since: 5.0.4
  return: void
end note

note right of Data::setDispenserConfigs
  Configures dispenser settings for the component.
This includes settings for JavaScript, CSS, PHP, and SQL files.

  since: 5.0.4
  return: void
end note

note left of Data::initializeGuiMapper
  Initializes the GUI mapper configuration.

  since: 5.0.4
  return: array
end note

note right of Data::configureJavaScript
  Configures JavaScript settings for the component.

  since: 5.0.4
  return: void
end note

note left of Data::configureGlobalCss
  Configures global CSS settings for the component.

  since: 5.0.4
  return: void
end note

note right of Data::configurePhpScripts
  Configures PHP script settings for the component.

  since: 5.0.4
  return: void
end note

note left of Data::configurePhpHelpers
  Configures PHP helper settings for the component.

  since: 5.0.4
  return: void
end note

note right of Data::configureAdminAndSiteEvents
  Configures admin and site events for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setSql
  Processes the SQL for the component.

  since: 5.0.4
  return: void
end note

note right of Data::setBom
  Processes the bom for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setReadMe
  Processes the readme for the component.

  since: 5.0.4
  return: void
end note

note right of Data::setDashboardMethods
  Processes dashboard-related methods and configurations for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setServers
  Configure the component's server settings.
This method coordinates URL validation (including XML filename extraction)
and protocol configuration for update, changelog, and sales servers.

  since: 5.2.1
  return: void
end note

note right of Data::normalizeServerUrls
  Validate and normalize the update and changelog server URLs.
- Ensures URLs are well-formed (contain 'http' and pass StringHelper::check()).
- If valid, extracts the XML filename using extractXmlFilename().
- If invalid, resets the URL, target, and add flags appropriately.

  since: 5.2.1
  return: void
end note

note left of Data::configureServerProtocols
  Configure protocols for update, changelog, and sales servers.
- If the server ID is numeric and > 0, fetches its protocol using GetHelper::var().
- Otherwise, resets the server ID and protocol to 0.
- For the sales server, also resets the "add_sales_server" flag.

  since: 5.2.1
  return: void
end note

note right of Data::extractXmlFilename
  Extract the XML filename from a given update server URL.
This method:
- Parses the URL using parse_url().
- First looks for any query parameter whose value ends with ".xml" (case-insensitive).
- If none is found, it falls back to the last path segment if it ends with ".xml".
- Ignores query strings, fragments, and trailing slashes safely.
- Returns the filename with its original case preserved.

  since: 5.2.1
  return: ?string
end note

note left of Data::stripXmlExtension
  Strip the ".xml" extension from a filename.
This method:
- Only strips the extension if it ends with ".xml" (case-insensitive).
- Preserves the original case of the filename.
- Safely handles filenames without ".xml" (returns unchanged).

  since: 5.2.1
  return: string
end note

note right of Data::setIgnoreFolders
  Configures the list of folders to ignore for the repository.

  since: 5.0.4
  return: void
end note

note left of Data::setModules
  Configures all modules for the component.

  since: 5.0.4
  return: void
end note

note right of Data::setPlugins
  Configures all plugins for the component.

  since: 5.0.4
  return: void
end note

note left of Data::setRouter
  Configures the site router for the component.

  since: 5.0.4
  return: void
end note

@enduml
```

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---ef9578e5_4c9d_46bf_866f_3a94bdc7b753---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")