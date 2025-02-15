```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
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
  # $db
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
  Configures the servers for update and sales handling.

  since: 5.0.4
  return: void
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ef9578e5_4c9d_46bf_866f_3a94bdc7b753---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

