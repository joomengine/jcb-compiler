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

