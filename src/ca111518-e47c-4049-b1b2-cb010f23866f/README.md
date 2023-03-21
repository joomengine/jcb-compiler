```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Reverse (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Placeholder**
```uml
@startuml
class Reverse  #Gold {
  # Config $config
  # Placeholder $placeholder
  # Language $language
  # Extractor $extractor
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
  + engine(string $string, array $placeholders, ...) : string
  # setReverse(string $updateString, string $string, ...) : string
}

note right of Reverse::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?Language $language = null
    ?Extractor $extractor = null
end note

note right of Reverse::engine
  Reverse Engineer the dynamic placeholders (TODO hmmmm this is not ideal)

  since: 3.2.0
  return: string
  
  arguments:
    string $string
    array $placeholders
    string $target
    ?int $id = null
    string $field = 'code'
    string $table = 'custom_code'
end note

note right of Reverse::setReverse
  Set the language strings for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
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

