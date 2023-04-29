```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customcode (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
class Customcode  #Gold {
  + array $functionNameMemory
  + $active
  + $memory
  # $data
  # Config $config
  # Placeholder $placeholder
  # Extractor $extractor
  # Power $power
  # External $external
  # $db
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
  + update(string $string, int $debug) : string
  + set(string $string, int $debug, ...) : string
  + get(?array $ids = null, bool $setLang = true, ...) : bool
  # insert(array $ids, string $string, ...) : string
  # buildPlaceholders(array $item, array $code, ...) : void
  # check(array $ids) : Mixed
}

note right of Customcode::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?Extractor $extractor = null
    ?Power $power = null
    ?External $external = null
    ?\JDatabaseDriver $db = null
end note

note right of Customcode::update
  Update **ALL** dynamic values in a strings here
We can now at any time debug the
dynamic build values if it gets broken

  since: 3.2.0
  return: string
end note

note right of Customcode::set
  Set the custom code data & can load it in to string

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    int $debug
    ?int $not = null
end note

note right of Customcode::get
  Load the custom code from the system

  since: 3.2.0
  return: bool
  
  arguments:
    ?array $ids = null
    bool $setLang = true
    int $debug
end note

note right of Customcode::insert
  Insert the custom code into the string

  since: 3.2.0
  return: string
  
  arguments:
    array $ids
    string $string
    int $debug
end note

note right of Customcode::buildPlaceholders
  Build custom code placeholders

  since: 3.2.0
  return: void
  
  arguments:
    array $item
    array $code
    int $debug
end note

note right of Customcode::check
  check if we already have these ids in local memory

  since: 3.2.0
  return: Mixed
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

