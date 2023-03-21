```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InsertInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**
```uml
@startuml
interface InsertInterface  #Lavender {
  + rows(array $data, string $table) : bool
  + items(array $data, array $columns, ...) : bool
  + row(array $data, string $table) : bool
}

note right of InsertInterface::rows
  Set rows to the database

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::items
  Set items to the database

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    array $columns
    string $table
end note

note right of InsertInterface::row
  Set row to the database

  since: 3.2.0
  return: bool
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

