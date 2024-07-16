```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Search (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**

```uml
@startuml
class Search << (F,LightGreen) >> #RoyalBlue {
  # Database $database
  # Parser $parser
  # Bucket $bucket
  + __construct(Database $database, Parser $parser, ...)
  + power(string $guid) : ?object
  + alias(string $guid, string $className) : string
  + validInject(string $guid) : bool
  + name(string $guid, string $as = 'default') : ?string
  + description(string $guid) : ?string
  + serviceProviders(string $guid) : ?array
  + dependencies(string $guid) : ?array
  - getAliasFromServiceProvider(string $guid, string $className) : ?string
  - getAliasFromRegisterMethod(string $content, string $className) : ?string
  - getAliasFromPower(string $guid) : ?string
  - getAliasFromNamespace(string $input) : string
  - getServiceProviderDependencyName(string $serviceProvider, string $dependency) : ?string
}

note right of Search::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Database $database
    Parser $parser
    Bucket $bucket
end note

note left of Search::power
  Get the power object

  since: 3.2.0
  return: ?object
end note

note right of Search::alias
  Get the power alias to use in container calls

  since: 3.2.0
  return: string
end note

note left of Search::validInject
  Check if a power class is valid to inject into another class

  since: 3.2.0
  return: bool
end note

note right of Search::name
  Get the power class name

  since: 3.2.0
  return: ?string
end note

note left of Search::description
  Get the power class description

  since: 3.2.0
  return: ?string
end note

note right of Search::serviceProviders
  Get all service providers where this power is linked

  since: 3.2.0
  return: ?array
end note

note left of Search::dependencies
  Get all the power dependencies

  since: 3.2.0
  return: ?array
end note

note right of Search::getAliasFromServiceProvider
  Retrieves the alias form linked service provider.

  since: 3.2.0
  return: ?string
end note

note left of Search::getAliasFromRegisterMethod
  Retrieves the alias for a given class from a provided string.

  since: 3.2.0
  return: ?string
end note

note right of Search::getAliasFromPower
  Retrieves the alias form linked service provider.

  since: 3.2.0
  return: ?string
end note

note left of Search::getAliasFromNamespace
  Converts the namespace of a power into an class alias

  since: 3.2.0
  return: string
end note

note right of Search::getServiceProviderDependencyName
  Get dependency name linked to service provider

  since: 3.2.0
  return: ?string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---50302fce_62b4_48ae_a692_9cc4595ce74c---Power
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

