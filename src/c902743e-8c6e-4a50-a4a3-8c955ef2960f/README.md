```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Fielddynamicinterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Interfaces\Creator**
> extends: ****
```uml
@startuml
interface Fielddynamicinterface  #Lavender {
  + get(array $field, array $view, ...) : mixed
}

note right of Fielddynamicinterface::get
  Get the Dynamic field and build all it needs

  since: 3.2.0
  return: mixed
  
  arguments:
    array $field
    array $view
    int $viewType
    string $langView
    string $nameSingleCode
    string $nameListCode
    array $placeholders
    string $dbkey
    bool $build
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

