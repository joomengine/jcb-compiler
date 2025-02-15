```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Status (Details)
> namespace: **VDM\Joomla\Componentbuilder\Network**

```uml
@startuml
class Status << (F,LightGreen) >> #RoyalBlue {
  # Network $network
  # Core $core
  # Url $url
  + __construct(Network $network, Core $core, ...)
  + get(string $target, string $domain, ...) : int
  + active(string $target, ?array $excludeDomains = ['git.vdm.dev']) : ?object
  + network(string $target, ?string $domain = null, ...) : ?object
  - getDomainData(array $network, string $domain, ...) : ?object
  - fetchNetworkData(string $target) : object
}

note right of Status::__construct
  Constructor.

  since: 5.0.4
  
  arguments:
    Network $network
    Core $core
    Url $url
end note

note right of Status::get
  Retrieves the status for the given network target, utilizing caching via the Core registry.

  since: 5.0.4
  return: int
  
  arguments:
    string $target
    string $domain
    string $repository
    string $organization = 'joomla'
end note

note right of Status::active
  Retrieves a random active repository target, excluding the specified domain.

  since: 5.0.4
  return: ?object
end note

note right of Status::network
  Retrieves the data for the given network target, utilizing caching via the Core registry.
If the data for the target is already cached in the Core registry, it returns that data.
Otherwise, it fetches the data from the Network, caches it, and returns it.

  since: 5.0.4
  return: ?object
  
  arguments:
    string $target
    ?string $domain = null
    ?string $organization = null
    ?string $repository = null
end note

note right of Status::getDomainData
  Retrieves the data filtered by domain, organization, and optionally repository.

  since: 5.0.4
  return: ?object
  
  arguments:
    array $network
    string $domain
    ?string $organization = null
    ?string $repository = null
end note

note right of Status::fetchNetworkData
  Fetches and caches the network data for a given target.

  since: 5.0.4
  return: object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---809d3077_c105_4e9c_8ac5_8fbee10cf9fc---Power
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

