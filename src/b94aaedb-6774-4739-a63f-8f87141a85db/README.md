```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Event (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Service**

```uml
@startuml
class Event  #Gold {
  # $currentVersion
  + register(Container $container) : void
  + getEvent(Container $container) : EventInterface
  + getJ3Event(Container $container) : J3Event
  + getJ4Event(Container $container) : J4Event
  + getJ5Event(Container $container) : J5Event
}

note right of Event::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Event::getEvent
  Get the Event

  since: 3.2.0
  return: EventInterface
end note

note right of Event::getJ3Event
  Get the Joomla 3 Event

  since: 3.2.0
  return: J3Event
end note

note right of Event::getJ4Event
  Get the Joomla 4 Event

  since: 3.2.0
  return: J4Event
end note

note right of Event::getJ5Event
  Get the Joomla 5 Event

  since: 3.2.0
  return: J5Event
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---b94aaedb_6774_4739_a63f_8f87141a85db---Power
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

