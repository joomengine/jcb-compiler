```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ClassInjector (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**

```uml
@startuml
class ClassInjector << (F,LightGreen) >> #RoyalBlue {
  # string $version
  # array $properties
  # array $comments
  # array $arguments
  # array $assignments
  + getCode() : ?string
  + setVersion(string $version) : void
  + setProperty(string $classname, string $ClassName, ...) : void
  + setComment(string $classname, string $ClassName, ...) : void
  + setArgument(string $classname, string $ClassName) : void
  + setAssignment(string $classname) : void
  - getComments() : string
  - getArguments() : string
}

note right of ClassInjector::getCode
  Get the generated class code

  since: 3.2.0
  return: ?string
end note

note left of ClassInjector::setVersion
  Set the class since version

  since: 3.2.0
  return: void
end note

note right of ClassInjector::setProperty
  Set the class property

  since: 3.2.0
  return: void
  
  arguments:
    string $classname
    string $ClassName
    string $description
end note

note left of ClassInjector::setComment
  Set the comment for the constructor parameter.

  since: 3.2.0
  return: void
  
  arguments:
    string $classname
    string $ClassName
    string $description
end note

note right of ClassInjector::setArgument
  Set the constructor argument.

  since: 3.2.0
  return: void
end note

note left of ClassInjector::setAssignment
  Set the assignment code inside the constructor.

  since: 3.2.0
  return: void
end note

note right of ClassInjector::getComments
  Get the comments for the constructor parameter.

  since: 3.2.0
  return: string
end note

note left of ClassInjector::getArguments
  Format the arguments to ensure they fit within a specified line length.
Arguments are added to the line until the max length is reached.
Then, they are pushed to a new line with appropriate indentation.

  since: 3.2.0
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---c72692b0_0a0f_412a_b05b_80002cbf886a---Power
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

