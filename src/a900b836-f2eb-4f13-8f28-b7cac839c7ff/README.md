```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlaplugin**
```uml
@startuml
class Structure  #Gold {
  # Plugin $plugin
  # Component $component
  # Config $config
  # Registry $registry
  # Dispenser $dispenser
  # EventInterface $event
  # Counter $counter
  # Folder $folder
  # File $file
  # Files $files
  + __construct(?Plugin $plugin = null, ?Component $component = null, ...)
  + build() : void
  # getXML($plugin) : string
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Plugin $plugin = null
    ?Component $component = null
    ?Config $config = null
    ?Registry $registry = null
    ?Dispenser $dispenser = null
    ?EventInterface $event = null
    ?Counter $counter = null
    ?Folder $folder = null
    ?File $file = null
    ?Files $files = null
end note

note right of Structure::build
  Build the Plugins files, folders, url's and config

  since: 3.2.0
  return: void
end note

note right of Structure::getXML
  get the plugin xml template

  since: 3.2.0
  return: string
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

