```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Modifieddate (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
```uml
@startuml
class Modifieddate  #Gold {
  # array $last
  + get(array $item) : string
  # getDate(array $item) : int
  # getModified(array $item) : int
  # getKey(array $item) : string
}

note right of Modifieddate::get
  Get the last modified date of an item

  since: 3.2.0
  return: string
end note

note right of Modifieddate::getDate
  Get the last modified date of an item

  since: 3.2.0
  return: int
end note

note right of Modifieddate::getModified
  Get the last modified date of an item's sub items

  since: 3.2.0
  return: int
end note

note right of Modifieddate::getKey
  Get the key for an item

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

