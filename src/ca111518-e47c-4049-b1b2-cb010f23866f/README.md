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
  # Power $power
  + __construct(?Config $config = null, ?Placeholder $placeholder = null, ...)
  + engine(string $string, array $placeholders, ...) : string
  # setReverse(string $updateString, string $string, ...) : string
  # reverseSuperPowers(string $updateString, string $string, ...) : string
  # getReversePower(array $powers, array $useStatements) : ?array
  # reverseLanguage(string $updateString, string $string, ...) : string
  # reverseCustomCode(string $updateString, string $string) : string
}

note right of Reverse::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Placeholder $placeholder = null
    ?Language $language = null
    ?Extractor $extractor = null
    ?Power $power = null
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
    ?array $useStatements = null
end note

note right of Reverse::setReverse
  Reverse engineer the dynamic language, and super powers

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
    ?array $useStatements
end note

note right of Reverse::reverseSuperPowers
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    ?array $useStatements
end note

note right of Reverse::getReversePower
  Set the super powers keys for the reveres process

  since: 3.2.0
  return: ?array
end note

note right of Reverse::reverseLanguage
  Set the language strings for the reveres process

  since: 3.2.0
  return: string
  
  arguments:
    string $updateString
    string $string
    string $target
end note

note right of Reverse::reverseCustomCode
  Set the custom code placeholder for the reveres process

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

