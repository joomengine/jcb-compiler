```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Paths (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Customcode\Extractor**
```uml
@startuml
class Paths  #Gold {
  + array $active
  # array $componentPlaceholder
  # Config $config
  # Placeholder $placeholder
  # Customcode $customcode
  # Extractor $extractor
  # $db
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
  # load() : void
  # getModuleIDs() : mixed
  # getModulePath($id) : mixed
  # getPluginIDs() : mixed
  # getPluginPath($id) : mixed
}

note right of Paths::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?ComponentPlaceholder $componentPlaceholder = null
    ?Customcode $customcode = null
    ?Extractor $extractor = null
end note

note right of Paths::load
  get the local installed path of this component

  since: 3.2.0
  return: void
end note

note right of Paths::getModuleIDs
  get the Joomla Modules IDs

  since: 3.2.0
  return: mixed
end note

note right of Paths::getModulePath
  get the Joomla module path

  since: 3.2.0
  return: mixed
end note

note right of Paths::getPluginIDs
  get the Joomla plugins IDs

  since: 3.2.0
  return: mixed
end note

note right of Paths::getPluginPath
  get the Joomla plugin path

  return: mixed
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

