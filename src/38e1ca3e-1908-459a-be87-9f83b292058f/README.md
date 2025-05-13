```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\JoomlaPower\Service**

```uml
@startuml
class JoomlaPower  #Gold {
  + register(Container $container) : void
  + getConfig(Container $container) : Config
  + getPowerTable(Container $container) : Table
  + getMessageBus(Container $container) : MessageBus
  + getGrep(Container $container) : Grep
  + getRemoteConfig(Container $container) : RemoteConfig
  + getRemoteGet(Container $container) : Get
  + getRemoteSet(Container $container) : Set
  + getItemReadme(Container $container) : ItemReadme
  + getMainReadme(Container $container) : MainReadme
}

note right of JoomlaPower::register
  Registers the service provider with a DI container.

  since: 3.2.1
  return: void
end note

note left of JoomlaPower::getConfig
  Get The Config Class.

  since: 3.2.1
  return: Config
end note

note right of JoomlaPower::getPowerTable
  Get The Power Table Class.

  since: 5.1.1
  return: Table
end note

note left of JoomlaPower::getMessageBus
  Get The Message Bus Class.

  since: 5.2.1
  return: MessageBus
end note

note right of JoomlaPower::getGrep
  Get The Grep Class.

  since: 3.2.1
  return: Grep
end note

note left of JoomlaPower::getRemoteConfig
  Get The Remote Config Class.

  since: 5.1.1
  return: RemoteConfig
end note

note right of JoomlaPower::getRemoteGet
  Get The Remote Get Class.

  since: 3.2.1
  return: Get
end note

note left of JoomlaPower::getRemoteSet
  Get The Remote Set Class.

  since: 3.2.2
  return: Set
end note

note right of JoomlaPower::getItemReadme
  Get The Item Class.

  since: 3.2.1
  return: ItemReadme
end note

note left of JoomlaPower::getMainReadme
  Get The Main Class.

  since: 3.2.1
  return: MainReadme
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---38e1ca3e_1908_459a_be87_9f83b292058f---Power
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

