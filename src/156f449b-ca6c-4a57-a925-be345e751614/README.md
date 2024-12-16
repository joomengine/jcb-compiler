```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Network (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**

```uml
@startuml
class Network  #Gold {
  + register(Container $container) : void
  + getResolve(Container $container) : Resolve
  + getStatus(Container $container) : Status
  + getUrl(Container $container) : Url
  + getCore(Container $container) : Core
  + getParsedUrls(Container $container) : ParsedUrls
}

note right of Network::register
  Registers the service provider with a DI container.

  since: 5.0.4
  return: void
end note

note right of Network::getResolve
  Get The Resolve Class.

  since: 5.0.4
  return: Resolve
end note

note right of Network::getStatus
  Get The Status Class.

  since: 5.0.4
  return: Status
end note

note right of Network::getUrl
  Get The Url Class.

  since: 5.0.4
  return: Url
end note

note right of Network::getCore
  Get The Core Class.

  since: 5.0.4
  return: Core
end note

note right of Network::getParsedUrls
  Get The ParsedUrls Class.

  since: 5.0.4
  return: ParsedUrls
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---156f449b_ca6c_4a57_a925_be345e751614---Power
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

