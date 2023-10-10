```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Library**
```uml
@startuml
class Structure  #Gold {
  # Config $config
  # Registry $registry
  # Event $event
  # Component $component
  # Content $content
  # Counter $counter
  # Paths $paths
  # Folder $folder
  # File $file
  + __construct(Config $config, Registry $registry, ...)
  + build() : void
}

note right of Structure::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Registry $registry
    Event $event
    Component $component
    Content $content
    Counter $counter
    Paths $paths
    Folder $folder
    File $file
end note

note right of Structure::build
  Build the Libraries files, folders, url's and config

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

