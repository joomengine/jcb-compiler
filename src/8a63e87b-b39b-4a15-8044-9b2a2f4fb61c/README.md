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
  + register(Container $container) : void
  + getComponent(Container $container) : CompilerComponent
  + getSettings(Container $container) : Settings
  + getDashboard(Container $container) : Dashboard
  + getPlaceholder(Container $container) : Placeholder
  + getData(Container $container) : Data
  + getStructure(Container $container) : Structure
  + getStructuresingle(Container $container) : Structuresingle
  + getStructuremultiple(Container $container) : Structuremultiple
}

note right of Component::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Component::getComponent
  Get the Component

  since: 3.2.0
  return: CompilerComponent
end note

note right of Component::getSettings
  Get the Compiler Component (version) Settings

  since: 3.2.0
  return: Settings
end note

note left of Component::getDashboard
  Get the Compiler Component Dynamic Dashboard

  since: 3.2.0
  return: Dashboard
end note

note right of Component::getPlaceholder
  Get the Component Placeholders

  since: 3.2.0
  return: Placeholder
end note

note left of Component::getData
  Get the Component Data

  since: 3.2.0
  return: Data
end note

note right of Component::getStructure
  Get the Compiler Structure

  since: 3.2.0
  return: Structure
end note

note left of Component::getStructuresingle
  Get the Compiler Structure Single

  since: 3.2.0
  return: Structuresingle
end note

note right of Component::getStructuremultiple
  Get the Compiler Structure Multiple

  since: 3.2.0
  return: Structuremultiple
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

