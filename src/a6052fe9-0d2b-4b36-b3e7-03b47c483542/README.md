```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Injector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\JoomlaPower**
> extends: **ExtendingInjector**
```uml
@startuml
class Injector << (F,LightGreen) >> #RoyalBlue {
  # buildNamespaceStatment(object $power) : string
  # getUniqueName(string $name, object $power) : string
}

note right of Injector::buildNamespaceStatment
  Builds the namespace statement from the power object's namespace and class name.

  since: 3.2.0
  return: string
end note

note right of Injector::getUniqueName
  Ensures the name for the use statement is unique, avoiding conflicts with other classes.

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

