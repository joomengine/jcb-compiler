```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Updatesql (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Updatesql  #Gold {
  # array $name
  # Registry $registry
  + __construct(?Registry $registry = null)
  + set(mixed $old, mixed $new, ...) : void
  # add(string $type, int $item, ...) : void
  # name(int $id) : string
}

note right of Updatesql::__construct
  Constructor

  since: 3.2.0
end note

note right of Updatesql::set
  check if an update SQL is needed

  since: 3.2.0
  return: void
  
  arguments:
    mixed $old
    mixed $new
    string $type
    mixed $key = null
    ?array $ignore = null
end note

note right of Updatesql::add
  Set the add sql

  since: 3.2.0
  return: void
  
  arguments:
    string $type
    int $item
    mixed $key = null
end note

note right of Updatesql::name
  Get the Admin view table name

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

