```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Injector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Power**
```uml
@startuml
class Injector << (F,LightGreen) >> #RoyalBlue {
  # Power $power
  # Extractor $extractor
  # Parser $parser
  # Placeholder $placeholder
  # array $map
  # array $useStatements
  # array $traits
  + __construct(?Power $power = null, ?Extractor $extractor = null, ...)
  + power(string $code) : string
  # update(array $guids, string $code) : string
  # inspect(object $power, ?array $useStatements, ...) : ?string
  # getName(string $useStatement) : ?string
  # getUniqueName(string $name, string $namespace, ...) : string
  # removeLastSpace(string $namespace) : string
  # addUseStatements(string $code, ?array $useStatements) : string
  # addLines(string $code, string $lines) : string
  # addLinesAfterDefinedLine(string $code, string $lines) : string
}

note right of Injector::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    ?Power $power = null
    ?Extractor $extractor = null
    ?Parser $parser = null
    ?Placeholder $placeholder = null
end note

note left of Injector::power
  Inject the powers found in the code

  since: 3.2.0
  return: string
end note

note right of Injector::update
  Update the code

  since: 3.2.0
  return: string
end note

note left of Injector::inspect
  inspect the super power

  since: 3.2.0
  return: ?string
  
  arguments:
    object $power
    ?array $useStatements
    ?array $traits
end note

note right of Injector::getName
  Extracts the class name from a use statement.

  since: 3.2.0
  return: ?string
end note

note left of Injector::getUniqueName
  Removes the last space from the namespace.

  since: 3.2.0
  return: string
  
  arguments:
    string $name
    string $namespace
    array $useOther
end note

note right of Injector::removeLastSpace
  Removes the last space from the namespace.

  since: 3.2.0
  return: string
end note

note left of Injector::addUseStatements
  Insert a line before the class declaration in the given class code.

  since: 3.2.0
  return: string
end note

note right of Injector::addLines
  Insert a line before the class declaration in the given class code.

  since: 3.2.0
  return: string
end note

note left of Injector::addLinesAfterDefinedLine
  Inserts a new line after the defined('_JEXEC') line.

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

