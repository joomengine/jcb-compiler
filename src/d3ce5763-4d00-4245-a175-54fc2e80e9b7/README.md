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
  # EventInterface $event
  # Component $component
  # Content $content
  # Counter $counter
  # Paths $paths
  # Folder $folder
  # File $file
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + build() : void
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?EventInterface $event = null
    ?Component $component = null
    ?Content $content = null
    ?Counter $counter = null
    ?Paths $paths = null
    ?Folder $folder = null
    ?File $file = null
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

