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
  - convertSettingsToArray(string $settingsJson) : ?array
  - setTargetVersion(string $guid, ?array $settings) : bool
  - setNamespaceAndType(string $guid, array $namespace) : void
  - setClassAndNamespace(string $guid) : void
  - handlePowerNotFound(string $guid) : bool
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
  Set a Joomla power

  since: 3.2.1
  return: bool
end note

note right of JoomlaPower::convertSettingsToArray
  Convert settings JSON string to array

  since: 3.2.2
  return: ?array
end note

note left of JoomlaPower::setTargetVersion
  Set the target version based on Joomla version and settings

  since: 3.2.2
  return: bool
end note

note right of JoomlaPower::setNamespaceAndType
  Set namespace and type for the active power

  since: 3.2.2
  return: void
end note

note left of JoomlaPower::setClassAndNamespace
  Set class name and namespace for the active power

  since: 3.2.2
  return: void
end note

note right of JoomlaPower::handlePowerNotFound
  Handle power not found scenario

  since: 3.2.2
  return: bool
end note

note left of JoomlaPower::extractLastNameFromNamespace
  Extracts the last part of a namespace string, which is typically the class name.

  since: 3.2.1
  return: ?string
end note

note right of JoomlaPower::removeLastNameFromNamespace
  Removes the last name from the namespace.

  since: 3.2.1
  return: string
end note

note left of JoomlaPower::isPowerSet
  Check if the power is already set

  since: 3.2.1
  return: bool
end note

note right of JoomlaPower::isGuidValid
  Validate the GUID

  since: 3.2.1
  return: bool
end note

note left of JoomlaPower::getPowerData
  Get the power data from the database

  since: 3.2.1
  return: ?object
end note

note right of JoomlaPower::getCleanNamespace
  Get Clean Namespace without use or ; as part of the name space

  since: 3.2.1
  return: string
end note

note left of JoomlaPower::getUseNamespace
  Get [use Namespace\Class;]

  since: 3.2.1
  return: string
end note

note right of JoomlaPower::setSuperPowers
  Set the super powers of this power

  since: 3.2.1
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
Super---3730a000_ab64_477d_8b0f_70eaf71b517a---Power
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

