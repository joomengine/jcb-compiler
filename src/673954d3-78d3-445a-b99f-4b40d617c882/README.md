```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structuresingle (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**
```uml
@startuml
class Structuresingle  #Gold {
  # string $newName
  # string $currentFullPath
  # string $packageFullPath
  # string $zipFullPath
  # Config $config
  # Registry $registry
  # Settings $settings
  # Component $component
  # Content $content
  # Counter $counter
  # Paths $paths
  # Files $files
  # CMSApplication $app
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + build() : bool
  - doLicenseCheck() : bool
  - doReadmeCheck() : bool
  - doChangelogCheck() : bool
  - setNewName(object $details) : void
  - setPaths(object $details) : void
  - pathExist(object $details) : bool
  - setTarget(string $target, object $details) : void
  - moveFile() : void
  - registerFile(string $target, object $details) : void
  - setDynamicTarget(object $details) : void
  - setDynamicFolders() : void
}

note right of Structuresingle::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?Settings $settings = null
    ?Component $component = null
    ?Content $content = null
    ?Counter $counter = null
    ?Paths $paths = null
    ?Files $files = null
    ?CMSApplication $app = null
end note

note left of Structuresingle::build
  Build the Single Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::doLicenseCheck
  Check if license must be added

  since: 3.2.0
  return: bool
end note

note left of Structuresingle::doReadmeCheck
  Check if readme must be added

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::doChangelogCheck
  Check if changelog must be added

  since: 3.2.0
  return: bool
end note

note left of Structuresingle::setNewName
  Set the new name

  since: 3.2.0
  return: void
end note

note right of Structuresingle::setPaths
  Set all needed paths

  since: 3.2.0
  return: void
end note

note left of Structuresingle::pathExist
  Check if path exists

  since: 3.2.0
  return: bool
end note

note right of Structuresingle::setTarget
  Set the target based on target type

  since: 3.2.0
  return: void
end note

note left of Structuresingle::moveFile
  Move/Copy the file into place

  since: 3.2.0
  return: void
end note

note right of Structuresingle::registerFile
  Register the file

  since: 3.2.0
  return: void
end note

note left of Structuresingle::setDynamicTarget
  Set Dynamic Target

  since: 3.2.0
  return: void
end note

note right of Structuresingle::setDynamicFolders
  Add the dynamic folders

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

