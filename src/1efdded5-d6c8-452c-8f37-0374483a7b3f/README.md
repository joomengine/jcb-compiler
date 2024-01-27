```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
class Structure  #Gold {
  # Placeholder $placeholder
  # Settings $settings
  # Paths $paths
  # Counter $counter
  # File $file
  # Files $files
  # CMSApplication $app
  + __construct(Placeholder $placeholder, Settings $settings, ...)
  + build(array $target, string $type, ...) : bool
  - getFileDetails(object $details, string $item, ...) : ?array
  - getPath(object $details, string $zipPath, ...) : ?string
  - getNewName(object $details, string $item, ...) : string
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Placeholder $placeholder
    Settings $settings
    Paths $paths
    Counter $counter
    File $file
    Files $files
    ?CMSApplication $app = null
end note

note right of Structure::build
  Build Structural Needed Files & Folders

  since: 3.2.0
  return: bool
  
  arguments:
    array $target
    string $type
    ?string $fileName = null
    ?array $config = null
end note

note right of Structure::getFileDetails
  Get the details

  since: 3.2.0
  return: ?array
  
  arguments:
    object $details
    string $item
    string $name
    ?string $fileName = null
    ?array $config = null
end note

note right of Structure::getPath
  Get the path

  since: 3.2.0
  return: ?string
  
  arguments:
    object $details
    string $zipPath
    string $name
end note

note right of Structure::getNewName
  Get the new name

  since: 3.2.0
  return: string
  
  arguments:
    object $details
    string $item
    string $name
    ?string $fileName = null
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

