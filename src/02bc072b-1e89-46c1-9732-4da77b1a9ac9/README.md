```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Power (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Service**
> extends: ****
```uml
@startuml
class Power  #Gold {
  + register(Container $container) : void
  + getConfig(Container $container) : Config
  + getTable(Container $container) : Table
  + getGrep(Container $container) : Grep
  + getSuperpower(Container $container) : Superpower
  + getParser(Container $container) : Parser
}

note right of Power::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Power::getConfig
  Get The Config Class.

  since: 3.2.0
  return: Config
end note

note right of Power::getTable
  Get The Table Class.

  since: 3.2.0
  return: Table
end note

note right of Power::getGrep
  Get The Grep Class.

  since: 3.2.0
  return: Grep
end note

note right of Power::getSuperpower
  Get The Super Class.

  since: 3.2.0
  return: Superpower
end note

note right of Power::getParser
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

