```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ClassInjectorBuilder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**

```uml
@startuml
class ClassInjectorBuilder << (F,LightGreen) >> #RoyalBlue {
  # Search $search
  # ClassInjector $classinjector
  + __construct(Search $search, ClassInjector $classinjector)
  + getCode(array $power) : ?string
  - valid(string $guid) : bool
  - getName(string $guid, string $as = 'default') : ?string
  - getDescription(string $guid) : ?string
  - getDependencyInjectionCode() : ?string
  - setVersion(string $version) : void
  - setProperty(string $name, string $description) : void
  - setComment(string $name, string $description) : void
  - setArgument(string $name) : void
  - setAssignment(string $name) : void
  - extractSinceVersion(string $inputString) : ?string
}

note right of ClassInjectorBuilder::__construct
  Constructor.

  since: 3.2.0
end note

note left of ClassInjectorBuilder::getCode
  Get the injection code.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::valid
  Check that this is a valid injection class.

  since: 3.2.0
  return: bool
end note

note left of ClassInjectorBuilder::getName
  Get the class name.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::getDescription
  Get the class description.

  since: 3.2.0
  return: ?string
end note

note left of ClassInjectorBuilder::getDependencyInjectionCode
  Get the dependency injection code.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::setVersion
  Set the class since version.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::setProperty
  Set the class property.

  since: 3.2.0
  return: void
end note

note right of ClassInjectorBuilder::setComment
  Set the class comment for the constructor parameter.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::setArgument
  Set the class constructor argument.

  since: 3.2.0
  return: void
end note

note right of ClassInjectorBuilder::setAssignment
  Get the assignment code inside the constructor.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::extractSinceVersion
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
Super---9c2fdd98_ce4e_4b97_a2f8_ee6990bdcbf7---Power
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

