```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Sqldump (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**
> extends: ****
```uml
@startuml
class Sqldump  #Gold {
  # Registry $registry
  # $db
  + __construct(?Registry $registry = null)
  + get(array $tables, string $view, ...) : ?string
  # escape(string|array $value) : string|array
}

note right of Sqldump::__construct
  Constructor

  since: 3.2.0
end note

note right of Sqldump::get
  Get SQL Dump

  since: 3.2.0
  return: ?string
  
  arguments:
    array $tables
    string $view
    int $view_id
end note

note right of Sqldump::escape
  Escape the values for a SQL dump

  since: 3.2.0
  return: string|array
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

