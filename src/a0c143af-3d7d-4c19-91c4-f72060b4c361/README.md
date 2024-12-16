```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Resolve (Details)
> namespace: **VDM\Joomla\Componentbuilder\Network**

```uml
@startuml
class Resolve << (F,LightGreen) >> #RoyalBlue {
  # Url $url
  # Status $status
  + __construct(Url $url, Status $status)
  + api(string $target, $domain, ...) : void
  - resolve(string $target, $domain, ...) : void
  - active(string $target) : ?object
  - logInfo(string $message) : void
  - logError(\Exception $exception, string $message) : void
}

note right of Resolve::__construct
  Constructor.

  since: 5.0.4
end note

note right of Resolve::api
  Resolves the API for a repository if it is part of the core network.
This method attempts to verify the status of the API and resolve an active URL if the current one is inactive.

  since: 5.0.4
  return: void
  
  arguments:
    string $target
    $domain
    $organisation
    $repository
end note

note right of Resolve::resolve
  Resolves an active API URL if the current API is inactive.
Updates the `$domain`, `$organisation`, and `$repository` parameters to point to an active API URL.

  since: 5.0.4
  return: void
  
  arguments:
    string $target
    $domain
    $organisation
    $repository
end note

note right of Resolve::active
  Retrieves a random active repository target, excluding the specified domain.

  since: 5.0.4
  return: ?object
end note

note right of Resolve::logInfo
  Logs an info custom message.

  since: 5.0.4
  return: void
end note

note right of Resolve::logError
  Logs an error with a custom message.
This method is a placeholder for your actual logging mechanism.

  since: 5.0.4
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---a0c143af_3d7d_4c19_91c4_f72060b4c361---Power
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

