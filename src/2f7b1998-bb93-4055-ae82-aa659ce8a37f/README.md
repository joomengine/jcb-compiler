```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Placeholder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class Placeholder  #Gold {
  + register(Container $container) : void
  + getPlaceholder(Container $container) : CompilerPlaceholder
  + getPlaceholderReverse(Container $container) : Reverse
}

note right of Placeholder::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Placeholder::getPlaceholder
  Get the Compiler Placeholder

  since: 3.2.0
  return: CompilerPlaceholder
end note

note right of Placeholder::getPlaceholderReverse
  Get the Compiler Placeholder Reverse

  since: 3.2.0
  return: Reverse
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

