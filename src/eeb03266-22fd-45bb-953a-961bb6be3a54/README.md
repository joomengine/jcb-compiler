```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Extractor (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
```uml
@startuml
class Extractor << (F,LightGreen) >> #Green {
  # array $powers
  # \JDatabaseDriver $db
  + __construct(?\JDatabaseDriver $db = null)
  + get_() : ?array
  + get(string $code) : ?array
  + reverse(string $code) : ?array
  + search(string $code) : void
  # load(array $found) : void
  # map(array $found) : ?array
  # filter(array $found) : ?array
  # namespaces(array $guids) : ?array
}

note right of Extractor::__construct
  Constructor

  since: 3.2.0
end note

note left of Extractor::get_
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of Extractor::get
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note left of Extractor::reverse
  Get Super Powers from the code string

  since: 3.2.0
  return: ?array
end note

note right of Extractor::search
  Get Super Powers from the code string and load it

  since: 3.2.0
  return: void
end note

note left of Extractor::load
  Load the Super Powers found

  since: 3.2.0
  return: void
end note

note right of Extractor::map
  Map the Super Powers to GUIDs

  since: 3.2.0
  return: ?array
end note

note left of Extractor::filter
  Filter the Super Powers to GUIDs

  since: 3.2.0
  return: ?array
end note

note right of Extractor::namespaces
  Get the complete namespace strings of the guids passed as an array.

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

