```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ServiceProviderBuilder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**

```uml
@startuml
class ServiceProviderBuilder << (F,LightGreen) >> #RoyalBlue {
  # Search $search
  # ServiceProvider $serviceprovider
  + __construct(Search $search, ServiceProvider $serviceprovider)
  + getCode(array $power) : ?string
  - setRegisterLines(array $useSelections) : void
  - setGetFunctions(array $useSelections) : void
  - valid(string $guid) : bool
  - getName(string $guid, string $as = 'default') : ?string
  - getFunctionName(string $name) : string
  - getDependencies(string $guid) : ?array
  - getDescription(string $guid) : ?string
  - getAlias(string $guid, string $className) : string
  - getServiceProviderCode() : ?string
  - setVersion(string $version) : void
  + setRegisterLine(string $className, string $functionName, ...) : void
  + setGetFunction(string $className, string $functionName, ...) : void
  - extractSinceVersion(string $inputString) : ?string
}

note right of ServiceProviderBuilder::__construct
  Constructor.

  since: 3.2.0
end note

note left of ServiceProviderBuilder::getCode
  Get the service provider code.

  since: 3.2.0
  return: ?string
end note

note right of ServiceProviderBuilder::setRegisterLines
  Set the class alias and share code for the service provider register.

  since: 3.2.0
  return: void
end note

note left of ServiceProviderBuilder::setGetFunctions
  Set the class get function for the service provider.

  since: 3.2.0
  return: void
end note

note right of ServiceProviderBuilder::valid
  Check that this is a valid injection class.

  since: 3.2.0
  return: bool
end note

note left of ServiceProviderBuilder::getName
  Get the class name.

  since: 3.2.0
  return: ?string
end note

note right of ServiceProviderBuilder::getFunctionName
  Get the function name.

  since: 3.2.0
  return: string
end note

note left of ServiceProviderBuilder::getDependencies
  Get the dependencies of a class

  since: 3.2.0
  return: ?array
end note

note right of ServiceProviderBuilder::getDescription
  Get the class description.

  since: 3.2.0
  return: ?string
end note

note left of ServiceProviderBuilder::getAlias
  Get the class alias

  since: 3.2.0
  return: string
end note

note right of ServiceProviderBuilder::getServiceProviderCode
  Get the service provider code.

  since: 3.2.0
  return: ?string
end note

note left of ServiceProviderBuilder::setVersion
  Set the class since version.

  since: 3.2.0
  return: void
end note

note right of ServiceProviderBuilder::setRegisterLine
  Set the class alias and share code for the service provider register.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $alias
end note

note left of ServiceProviderBuilder::setGetFunction
  Set the class get function for the service provider.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $description
    ?array $dependencies = null
end note

note right of ServiceProviderBuilder::extractSinceVersion
  Extract the '@since' version number from a given string.
This function checks the provided string for a '@since' annotation
and retrieves the subsequent version number. If no '@since'
annotation is found or no version number is provided after the
annotation, the function will return null.

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
Super---8a2a3ee5_6ce2_4604_91e2_01f770228960---Power
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

