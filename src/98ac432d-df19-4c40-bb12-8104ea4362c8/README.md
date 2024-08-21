```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class ArchitecturePlugin (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class ArchitecturePlugin  #Gold {
  # int $targetVersion
  + register(Container $container) : void
  + getExtension(Container $container) : Extension
  + getJ5Extension(Container $container) : J5Extension
  + getJ4Extension(Container $container) : J4Extension
  + getJ3Extension(Container $container) : J3Extension
  + getProvider(Container $container) : Provider
  + getJ5Provider(Container $container) : J5Provider
  + getJ4Provider(Container $container) : J4Provider
  + getJ3Provider(Container $container) : J3Provider
  + getMainXML(Container $container) : MainXML
  + getJ5MainXML(Container $container) : J5MainXML
  + getJ4MainXML(Container $container) : J4MainXML
  + getJ3MainXML(Container $container) : J3MainXML
}

note right of ArchitecturePlugin::register
  Registers the service provider with a DI container.

  since: 5.0.2
  return: void
end note

note left of ArchitecturePlugin::getExtension
  Get The Extension Class.

  since: 5.0.2
  return: Extension
end note

note right of ArchitecturePlugin::getJ5Extension
  Get The Extension Class.

  since: 5.0.2
  return: J5Extension
end note

note left of ArchitecturePlugin::getJ4Extension
  Get The Extension Class.

  since: 5.0.2
  return: J4Extension
end note

note right of ArchitecturePlugin::getJ3Extension
  Get The Extension Class.

  since: 5.0.2
  return: J3Extension
end note

note left of ArchitecturePlugin::getProvider
  Get The ProviderInterface Class.

  since: 5.0.2
  return: Provider
end note

note right of ArchitecturePlugin::getJ5Provider
  Get The Provider Class.

  since: 5.0.2
  return: J5Provider
end note

note left of ArchitecturePlugin::getJ4Provider
  Get The Provider Class.

  since: 5.0.2
  return: J4Provider
end note

note right of ArchitecturePlugin::getJ3Provider
  Get The Provider Class.

  since: 5.0.2
  return: J3Provider
end note

note left of ArchitecturePlugin::getMainXML
  Get The MainXML Class.

  since: 5.0.2
  return: MainXML
end note

note right of ArchitecturePlugin::getJ5MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J5MainXML
end note

note left of ArchitecturePlugin::getJ4MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J4MainXML
end note

note right of ArchitecturePlugin::getJ3MainXML
  Get The MainXML Class.

  since: 5.0.2
  return: J3MainXML
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---98ac432d_df19_4c40_bb12_8104ea4362c8---Power
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

