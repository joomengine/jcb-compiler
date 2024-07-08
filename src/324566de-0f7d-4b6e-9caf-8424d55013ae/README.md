```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
> extends: ****
```uml
@startuml
class Structure  #Gold {
  # array $htaccess
  # array $done
  # Power $power
  # Config $config
  # Registry $registry
  # EventInterface $event
  # Counter $counter
  # Paths $paths
  # Folder $folder
  # File $file
  # Files $files
  # CMSApplication $app
  + __construct(?Power $power = null, ?Config $config = null, ...)
  + build() : void
  - createFile(string $content, string $fullPath, ...) : void
  - setHtaccess(object $power) : void
  - setDynamicFolders() : void
  - setSuperPowerDetails() : void
  - setSuperPowerFiles(object $power, string $bom) : void
  - loadExistingSuperPower(string $repository) : void
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Power $power = null
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Counter $counter = null
    ?Paths $paths = null
    ?Folder $folder = null
    ?File $file = null
    ?Files $files = null
    ?CMSApplication $app = null
end note

note left of Structure::build
  Build the Powers files, folders

  since: 3.2.0
  return: void
end note

note right of Structure::createFile
  Create a file with optional custom content and save it to the given path.

  since: 3.2.0
  return: void
  
  arguments:
    string $content
    string $fullPath
    string $fileName
    string $key
end note

note left of Structure::setHtaccess
  Set the .htaccess for this power path

  since: 3.2.0
  return: void
end note

note right of Structure::setDynamicFolders
  Add the dynamic folders

  since: 3.2.0
  return: void
end note

note left of Structure::setSuperPowerDetails
  Set the super powers details structure

  since: 3.2.0
  return: void
end note

note right of Structure::setSuperPowerFiles
  Set the super power file paths

  since: 3.2.0
  return: void
end note

note left of Structure::loadExistingSuperPower
  Set the super power file paths

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

