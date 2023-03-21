```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**
```uml
@startuml
class Structure  #Gold {
  # Settings $settings
  # Paths $paths
  # Folder $folder
  + __construct(?Settings $settings = null, ?Paths $paths = null, ...)
  + build() : bool
  # folders(object $folders, string $path) : void
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Settings $settings = null
    ?Paths $paths = null
    ?Folder $folder = null
end note

note right of Structure::build
  Build the Component Structure

  since: 3.2.0
  return: bool
end note

note right of Structure::folders
  Create the folder and subfolders

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

