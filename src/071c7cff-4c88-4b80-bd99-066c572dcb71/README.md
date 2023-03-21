```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Structure (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Joomlamodule**
```uml
@startuml
class Structure  #Gold {
  # Module $module
  # Component $component
  # Config $config
  # Registry $registry
  # Dispenser $dispenser
  # EventInterface $event
  # Counter $counter
  # Folder $folder
  # File $file
  # Files $files
  + __construct(?Module $module = null, ?Component $component = null, ...)
  + build() : void
  # getXML(object $module) : string
  # getCustomScriptField(array $fieldScriptBucket) : string
}

note right of Structure::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Module $module = null
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
  Build the Modules files, folders, url's and config

  since: 3.2.0
  return: void
end note

note right of Structure::getXML
  get the module xml template

  since: 3.2.0
  return: string
end note

note right of Structure::getCustomScriptField
  get the module admin custom script field

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

