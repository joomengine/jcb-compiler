```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Alias**
```uml
@startuml
class Data  #Gold {
  # Config $config
  # Registry $registry
  # Customcode $customcode
  # Gui $gui
  # Loader $loader
  # Libraries $libraries
  # \JDatabaseDriver $db
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + get(string $alias, string $table, ...) : ?array
  # set(string $table) : void
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Loader $loader = null
    ?Libraries $libraries = null
    ?\JDatabaseDriver $db = null
end note

note right of Data::get
  Get Data by Alias

  since: 3.2.0
  return: ?array
  
  arguments:
    string $alias
    string $table
    string $view
end note

note right of Data::set
  Load all alias and ID's of a table

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

