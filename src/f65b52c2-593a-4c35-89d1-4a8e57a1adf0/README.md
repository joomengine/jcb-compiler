```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class CoreRules (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**
> extends: ****
```uml
@startuml
class CoreRules  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getJ3CoreRule(Container $container) : J3CoreRule
  + getJ4CoreRule(Container $container) : J4CoreRule
  + getJ5CoreRule(Container $container) : J5CoreRule
  + getCoreRule(Container $container) : CoreRule
}

note right of CoreRules::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of CoreRules::getJ3CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J3CoreRule
end note

note right of CoreRules::getJ4CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J4CoreRule
end note

note right of CoreRules::getJ5CoreRule
  Get The CoreRule Class.

  since: 3.2.0
  return: J5CoreRule
end note

note right of CoreRules::getCoreRule
  Get The CoreRuleInterface Class.

  since: 3.2.0
  return: CoreRule
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

