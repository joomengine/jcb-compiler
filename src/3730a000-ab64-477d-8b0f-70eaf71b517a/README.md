```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class JoomlaPower (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler**
```uml
@startuml
class JoomlaPower << (F,LightGreen) >> #RoyalBlue {
  + array $active
  + array $namespace
  + array $superpowers
  # string $fixUrl
  # array $state
  # array $retry
  # Config $config
  # Placeholder $placeholder
  # Customcode $customcode
  # Gui $gui
  # Superpower $superpower
  # $db
  # $app
  + __construct(Config $config, Placeholder $placeholder, ...)
  + load(array $guids) : void
  + get(string $guid, int $build) : ?object
  - set(string $guid) : bool
  - extractLastNameFromNamespace(string $namespace) : ?string
  - removeLastNameFromNamespace(string $namespace) : string
  - isPowerSet(string $guid) : bool
  - isGuidValid(string $guid) : bool
  - getPowerData(string $guid) : ?object
  - getCleanNamespace(string $namespace) : string
  - getUseNamespace(string $namespace, string $as = 'default') : string
  - setSuperPowers(string $guid) : void
}

note right of JoomlaPower::__construct
  Constructor.

  since: 3.2.1
  
  arguments:
    Config $config
    Placeholder $placeholder
    Customcode $customcode
    Gui $gui
    Superpower $superpower
end note

note left of JoomlaPower::load
  load all the powers linked to this component

  since: 3.2.1
  return: void
end note

note right of JoomlaPower::get
  Get a power

  since: 3.2.1
  return: ?object
end note

note left of JoomlaPower::set
  Set a power

  since: 3.2.1
  return: bool
end note

note right of JoomlaPower::extractLastNameFromNamespace
  Extracts the last part of a namespace string, which is typically the class name.

  since: 3.2.1
  return: ?string
end note

note left of JoomlaPower::removeLastNameFromNamespace
  Removes the last name from the namespace.

  since: 3.2.1
  return: string
end note

note right of JoomlaPower::isPowerSet
  Check if the power is already set

  since: 3.2.1
  return: bool
end note

note left of JoomlaPower::isGuidValid
  Validate the GUID

  since: 3.2.1
  return: bool
end note

note right of JoomlaPower::getPowerData
  Get the power data from the database

  since: 3.2.1
  return: ?object
end note

note left of JoomlaPower::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 3.2.1
  return: string
end note

note right of JoomlaPower::getUseNamespace
  Get [use Namespace\Class;]

  since: 3.2.1
  return: string
end note

note left of JoomlaPower::setSuperPowers
  Set the super powers of this power

  since: 3.2.1
  return: void
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

