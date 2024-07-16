```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class History (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class History  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getHistory(Container $container) : HistoryInterface
  + getJ3History(Container $container) : J3History
  + getJ4History(Container $container) : J4History
  + getJ5History(Container $container) : J5History
}

note right of History::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of History::getHistory
  Get the History

  since: 3.2.0
  return: HistoryInterface
end note

note right of History::getJ3History
  Get the Joomla 3 History

  since: 3.2.0
  return: J3History
end note

note right of History::getJ4History
  Get the Joomla 4 History

  since: 3.2.0
  return: J4History
end note

note right of History::getJ5History
  Get the Joomla 5 History

  since: 3.2.0
  return: J5History
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---63782f74_7b03_4745_aa40_0adf8ed4e704---Power
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

