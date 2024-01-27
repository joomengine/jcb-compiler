```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Component (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**
```uml
@startuml
class Component  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getCompilerComponent(Container $container) : CompilerComponent
  + getJ3Settings(Container $container) : J3Settings
  + getJ4Settings(Container $container) : J4Settings
  + getDashboard(Container $container) : Dashboard
  + getPlaceholder(Container $container) : Placeholder
  + getData(Container $container) : Data
  + getStructure(Container $container) : Structure
  + getStructuresingle(Container $container) : Structuresingle
  + getStructuremultiple(Container $container) : Structuremultiple
  + getSettings(Container $container) : Settings
}

note right of Component::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Component::getCompilerComponent
  Get The Component Class.

  since: 3.2.0
  return: CompilerComponent
end note

note right of Component::getJ3Settings
  Get The Settings Class.

  since: 3.2.0
  return: J3Settings
end note

note left of Component::getJ4Settings
  Get The Settings Class.

  since: 3.2.0
  return: J4Settings
end note

note right of Component::getDashboard
  Get The Dashboard Class.

  since: 3.2.0
  return: Dashboard
end note

note left of Component::getPlaceholder
  Get The Placeholder Class.

  since: 3.2.0
  return: Placeholder
end note

note right of Component::getData
  Get The Data Class.

  since: 3.2.0
  return: Data
end note

note left of Component::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
end note

note right of Component::getStructuresingle
  Get The Structuresingle Class.

  since: 3.2.0
  return: Structuresingle
end note

note left of Component::getStructuremultiple
  Get The Structuremultiple Class.

  since: 3.2.0
  return: Structuremultiple
end note

note right of Component::getSettings
  Get The Settings Class.

  since: 3.2.0
  return: Settings
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

