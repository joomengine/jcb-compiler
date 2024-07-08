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
> extends: ****
```uml
@startuml
class JoomlaPower  #Gold {
  + register(Container $container) : void
  + getConfig(Container $container) : Config
  + getTable(Container $container) : Table
  + getGrep(Container $container) : Grep
  + getSuperpower(Container $container) : Superpower
  + getRepository(Container $container) : Repository
  + getParser(Container $container) : Parser
}

note right of JoomlaPower::register
  Registers the service provider with a DI container.

  since: 3.2.1
  return: void
end note

note right of JoomlaPower::getConfig
  Get The Config Class.

  since: 3.2.1
  return: Config
end note

note right of JoomlaPower::getTable
  Get The Table Class.

  since: 3.2.1
  return: Table
end note

note right of JoomlaPower::getGrep
  Get The Grep Class.

  since: 3.2.1
  return: Grep
end note

note right of JoomlaPower::getSuperpower
  Get The Super Class.

  since: 3.2.1
  return: Superpower
end note

note right of JoomlaPower::getRepository
  Get The Repository Class.

  since: 3.2.2
  return: Repository
end note

note right of JoomlaPower::getParser
  Get The Parser Class.

  since: 3.2.1
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

