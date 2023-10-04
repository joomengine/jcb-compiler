```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Fieldtypeinterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Creator**
```uml
@startuml
interface Fieldtypeinterface  #Lavender {
  + get(string $setType, array $fieldAttributes, ...) : mixed
}

note right of Fieldtypeinterface::get
  Create a field

  since: 3.2.0
  return: mixed
  
  arguments:
    string $setType
    array $fieldAttributes
    string $name
    string $typeName
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    array|null $optionArray
    ?array $custom = null
    string $taber = ''
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

