```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\JoomlaPower\Service**
```uml
@startuml
class JoomlaPower  #Gold {
  + register(Container $container) : void
  + getConfig(Container $container) : Config
  + getTable(Container $container) : Table
  + getGrep(Container $container) : Grep
  + getSuperpower(Container $container) : Superpower
  + getParser(Container $container) : Parser
}

note right of JoomlaPower::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of JoomlaPower::getConfig
  Get The Config Class.

  since: 3.2.0
  return: Config
end note

note right of JoomlaPower::getTable
  Get The Table Class.

  since: 3.2.0
  return: Table
end note

note right of JoomlaPower::getGrep
  Get The Grep Class.

  since: 3.2.0
  return: Grep
end note

note right of JoomlaPower::getSuperpower
  Get The Super Class.

  since: 3.2.0
  return: Superpower
end note

note right of JoomlaPower::getParser
  Get The Parser Class.

  since: 3.2.0
  return: Parser
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

