```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Purge (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Language**

```uml
@startuml
class Purge << (F,LightGreen) >> #RoyalBlue {
  # Update $update
  # $db
  + __construct(Update $update)
  + execute(array $values, string $targetGuid, ...) : void
  # handleUnlinkedString(array $item, array $targetTypes, ...) : void
  # removeExitingLangString(int $id) : void
}

note right of Purge::__construct
  Constructor.

  since: 5.0.2
end note

note right of Purge::execute
  Purge the unused language strings.
This method removes or updates language strings that are no longer linked
to the specified component. It checks if the strings are linked to other
extensions and either updates, archives, or deletes them based on the
conditions.

  since: 5.0.2
  return: void
  
  arguments:
    array $values
    string $targetGuid
    string $target = 'components'
end note

note right of Purge::handleUnlinkedString
  Handle strings that are unlinked from the current component.
This method checks if a string is linked to other extensions and either updates,
archives, or deletes it based on the conditions.

  since: 5.0.2
  return: void
  
  arguments:
    array $item
    array $targetTypes
    array $targets
    string $today
    int $counter
end note

note right of Purge::removeExitingLangString
  Remove existing language translation strings.
This method deletes a language string from the database based on its ID.

  since: 5.0.2
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
Super---0b0e574c_aab4_4eaf_96d8_d7210d8ed93e---Power
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

