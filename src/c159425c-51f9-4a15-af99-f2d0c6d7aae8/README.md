```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ExtractorInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Power**
```uml
@startuml
interface ExtractorInterface  #Lavender {
  + get_() : ?array
  + get(string $code) : ?array
  + reverse(string $code) : ?array
  + search(string $code) : void
}

note right of ExtractorInterface::get_
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of ExtractorInterface::get
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of ExtractorInterface::reverse
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of ExtractorInterface::search
  Get Super Powers from the code string and load it

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

