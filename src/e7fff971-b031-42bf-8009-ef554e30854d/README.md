```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Settings (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component\JoomlaFour**
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

