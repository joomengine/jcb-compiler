```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Customview (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Customview  #Gold {
  + register(Container $container) : void
  + getCustomviewData(Container $container) : CustomviewData
  + getDynamicgetData(Container $container) : DynamicgetData
  + getDynamicgetSelection(Container $container) : DynamicgetSelection
}

note right of Customview::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Customview::getCustomviewData
  Get the Compiler Customview Data

  since: 3.2.0
  return: CustomviewData
end note

note right of Customview::getDynamicgetData
  Get the Compiler Dynamicget Data

  since: 3.2.0
  return: DynamicgetData
end note

note right of Customview::getDynamicgetSelection
  Get the Compiler Dynamicget Selection

  since: 3.2.0
  return: DynamicgetSelection
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---87faa133_4cac_4816_ae41_5c3f9a2f76aa---Power
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

