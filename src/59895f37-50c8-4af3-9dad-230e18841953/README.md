```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Libraries (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Libraries  #Gold {
  # Config $config
  # LibraryManager $librarymanager
  # Library $library
  + __construct(Config $config, LibraryManager $librarymanager, ...)
  + set(string $key, object $item, ...) : void
}

note right of Libraries::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    LibraryManager $librarymanager
    Library $library
end note

note right of Libraries::set
  Set Libraries

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    object $item
    string $target = null
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

