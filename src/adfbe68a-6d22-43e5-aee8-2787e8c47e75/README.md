```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ContentOne (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Builder**
> extends: **Registry**
```uml
@startuml
class ContentOne  #Gold {
  + __construct()
  # getActiveKeys(string $path) : ?array
  # modelActiveKeys(array $keys) : array
}

note right of ContentOne::__construct
  Constructor.

  since: 3.2.0
end note

note right of ContentOne::getActiveKeys
  Get that the active keys from a path

  since: 3.2.0
  return: ?array
end note

note right of ContentOne::modelActiveKeys
  Model that the active key

  since: 3.2.0
  return: array
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

