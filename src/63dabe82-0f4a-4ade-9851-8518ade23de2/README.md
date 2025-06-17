### JCB! Power
# final class Settings (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component\JoomlaThree**

```uml
@startuml

class Settings << (F,LightGreen) >> #RoyalBlue {
  # array $standardFolders
  # array $standardRootFiles
  # ?object $data
  # Config $config
  # Registry $registry
  # EventInterface $event
  # Placeholder $placeholder
  # Component $component
  # Paths $paths
  # Dynamicpath $dynamicpath
  # Pathfix $pathfix
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + exists() : bool
  + structure() : object
  + multiple() : object
  + single() : object
  + standardFolder(string $folder) : bool
  + standardRootFile(string $file) : bool
  - isSet() : bool
  - get() : ?object
  - readJsonFile(string $filePath) : ?object
  - isValidData(object $versionData) : bool
  - loadExtraFolders() : void
  - addImportViewFolder() : void
  - addPhpSpreadsheetFolder() : void
  - addUikitFolder() : void
  - addFooTableFolder() : void
  - loadExtraFiles() : void
  - addGoogleChartFiles() : void
  - addFolders(object $versionData) : void
  - addFiles(object $versionData) : void
}

note right of Settings::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Placeholder $placeholder = null
    ?Component $component = null
    ?Paths $paths = null
    ?Dynamicpath $dynamicpath = null
    ?Pathfix $pathfix = null
end note

note left of Settings::exists
  Check if data set is loaded

  since: 3.2.0
  return: bool
end note

note right of Settings::structure
  Get Joomla - Folder Structure to Create

  since: 3.2.0
  return: object
end note

note left of Settings::multiple
  Get Joomla - Move Multiple Structure

  since: 3.2.0
  return: object
end note

note right of Settings::single
  Get Joomla - Move Single Structure

  since: 3.2.0
  return: object
end note

note left of Settings::standardFolder
  Check if Folder is a Standard Folder

  since: 3.2.0
  return: bool
end note

note right of Settings::standardRootFile
  Check if File is a Standard Root File

  since: 3.2.0
  return: bool
end note

note left of Settings::isSet
  Check if Data is Set

  since: 3.2.0
  return: bool
end note

note right of Settings::get
  get the Joomla Version Data

  since: 3.2.0
  return: ?object
end note

note left of Settings::readJsonFile
  Read the Json file data

  since: 3.2.0
  return: ?object
end note

note right of Settings::isValidData
  Check if this is valid data

  since: 3.2.0
  return: bool
end note

note left of Settings::loadExtraFolders
  Add Extra/Dynamic folders

  since: 3.2.0
  return: void
end note

note right of Settings::addImportViewFolder
  Add Import and Export Folder

  since: 3.2.0
  return: void
end note

note left of Settings::addPhpSpreadsheetFolder
  Add Php Spreadsheet Folder

  since: 3.2.0
  return: void
end note

note right of Settings::addUikitFolder
  Add Uikit Folders

  since: 3.2.0
  return: void
end note

note left of Settings::addFooTableFolder
  Add Foo Table Folder

  since: 3.2.0
  return: void
end note

note right of Settings::loadExtraFiles
  Add Extra/Dynamic files

  since: 3.2.0
  return: void
end note

note left of Settings::addGoogleChartFiles
  Add Google Chart Files

  since: 3.2.0
  return: void
end note

note right of Settings::addFolders
  Add Folders

  since: 3.2.0
  return: void
end note

note left of Settings::addFiles
  Add Files

  since: 3.2.0
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
Super---63dabe82_0f4a_4ade_9851_8518ade23de2---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")