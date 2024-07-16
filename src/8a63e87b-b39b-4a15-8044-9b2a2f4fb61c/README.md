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
  + getJ5Settings(Container $container) : J5Settings
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

note right of Component::getJ5Settings
  Get The Settings Class.

  since: 3.2.0
  return: J5Settings
end note

note left of Component::getDashboard
  Get The Dashboard Class.

  since: 3.2.0
  return: Dashboard
end note

note right of Component::getPlaceholder
  Get The Placeholder Class.

  since: 3.2.0
  return: Placeholder
end note

note left of Component::getData
  Get The Data Class.

  since: 3.2.0
  return: Data
end note

note right of Component::getStructure
  Get The Structure Class.

  since: 3.2.0
  return: Structure
end note

note left of Component::getStructuresingle
  Get The Structuresingle Class.

  since: 3.2.0
  return: Structuresingle
end note

note right of Component::getStructuremultiple
  Get The Structuremultiple Class.

  since: 3.2.0
  return: Structuremultiple
end note

note left of Component::getSettings
  Get The Settings Class.

  since: 3.2.0
  return: Settings
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8a63e87b_b39b_4a15_8044_9b2a2f4fb61c---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

