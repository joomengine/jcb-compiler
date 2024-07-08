```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
> extends: ****
```uml
@startuml
class JoomlaPower  #Gold {
  + register(Container $container) : void
  + getPowers(Container $container) : Powers
  + getSuperpower(Container $container) : Superpower
  + getGrep(Container $container) : Grep
  + getExtractor(Container $container) : Extractor
  + getInjector(Container $container) : Injector
}

note right of JoomlaPower::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::getPowers
  Get the Powers

  since: 3.2.0
  return: Powers
end note

note right of JoomlaPower::getSuperpower
  Get the Superpower

  since: 3.2.0
  return: Superpower
end note

note right of JoomlaPower::getGrep
  Get the Grep

  since: 3.2.0
  return: Grep
end note

note right of JoomlaPower::getExtractor
  Get the Compiler Power Extractor

  since: 3.2.0
  return: Extractor
end note

note right of JoomlaPower::getInjector
  Get the Compiler Power Injector

  since: 3.2.0
  return: Injector
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

