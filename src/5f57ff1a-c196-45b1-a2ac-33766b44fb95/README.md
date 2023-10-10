```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ContentMulti (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Builder**
> extends: **Registry**
```uml
@startuml
class ContentMulti  #Gold {
  + __construct()
  # getActiveKeys(string $path) : ?array
  # modelActiveKeys(array $keys) : ?array
}

note right of ContentMulti::__construct
  Constructor.

  since: 3.2.0
end note

note right of ContentMulti::getActiveKeys
  Get that the active keys from a path

  since: 3.2.0
  return: ?array
end note

note right of ContentMulti::modelActiveKeys
  Model that the active key

  since: 3.2.0
  return: ?array
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

