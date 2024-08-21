```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Joomlaplugin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Joomlaplugin  #Gold {
  # $targetVersion
  + register(Container $container) : void
  + getPluginData(Container $container) : PluginData
  + getJ3PluginData(Container $container) : J3PluginData
  + getJ4PluginData(Container $container) : J4PluginData
  + getJ5PluginData(Container $container) : J5PluginData
  + getStructure(Container $container) : Structure
  + getJ3Structure(Container $container) : J3Structure
  + getJ4Structure(Container $container) : J4Structure
  + getJ5Structure(Container $container) : J5Structure
  + getInfusion(Container $container) : Infusion
  + getJ3Infusion(Container $container) : J3Infusion
  + getJ4Infusion(Container $container) : J4Infusion
  + getJ5Infusion(Container $container) : J5Infusion
}

note right of Joomlaplugin::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Joomlaplugin::getPluginData
  Get The Plug-in Data Class.

  since: 5.0.2
  return: PluginData
end note

note right of Joomlaplugin::getJ3PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J3PluginData
end note

note left of Joomlaplugin::getJ4PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J4PluginData
end note

note right of Joomlaplugin::getJ5PluginData
  Get The PluginData Class.

  since: 5.0.2
  return: J5PluginData
end note

note left of Joomlaplugin::getStructure
  Get the Joomla Plugin Structure Builder

  since: 3.2.0
  return: Structure
end note

note right of Joomlaplugin::getJ3Structure
  Get the Joomla 3 Plugin Structure Builder

  since: 5.0.2
  return: J3Structure
end note

note left of Joomlaplugin::getJ4Structure
  Get the Joomla 4 Plugin Structure Builder

  since: 5.0.2
  return: J4Structure
end note

note right of Joomlaplugin::getJ5Structure
  Get the Joomla 5 Plugin Structure Builder

  since: 5.0.2
  return: J5Structure
end note

note left of Joomlaplugin::getInfusion
  Get The InfusionInterface Class.

  since: 5.0.2
  return: Infusion
end note

note right of Joomlaplugin::getJ3Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J3Infusion
end note

note left of Joomlaplugin::getJ4Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J4Infusion
end note

note right of Joomlaplugin::getJ5Infusion
  Get The Infusion Class.

  since: 5.0.2
  return: J5Infusion
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---9eba241c_af90_42dd_ae05_92ff4d8391d3---Power
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

